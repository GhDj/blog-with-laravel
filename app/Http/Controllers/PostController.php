<?php namespace App\Http\Controllers;


use App\Category;
use App\Post;
use App\Tag;
use App\User;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $posts = Post::where('status', '=', 'publish')->paginate(6);
        return view('posts')->with('posts', $posts)->with('categories', $categories)->with('tags', $tags);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create')->with('categories', $categories)->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $tags = explode(',', $request->tags[0]);


        $category = Category::where('slug', '=', $request->category)->get();
        $post = new Post();
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->category_id = $category[0]->id;
        $post->content = $request->input('content');
        if ($request->input('published') === 'on') {
            $post->status = "publish";
        } else {
            $post->status = "draft";
        }
        $post->save();
        $post->users()->attach(Auth::user()->id);
        foreach ($tags as $tag) {
            $ta = \App\Tag::where('name', '=', $tag)->first();
            if ($ta) {
                $post->tags()->attach($ta->id);
            } else {
                $t = new \App\Tag();
                $t->name = $tag;
                $t->slug = str_slug($tag, '-');
                $t->save();
                $post->tags()->attach(\App\Tag::where('name', '=', $tag)->orderBy('id', 'desc')->first()->id);
            }
        }

        return redirect('backend/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public
    function show($slug)
    {
        $post = Post::where('slug', '=', $slug)->get();
        return view('post')->with('post', $post[0]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public
    function edit($id)
    {

        $post = Post::find($id);
        $tags_post = $post->tags()->get();
        $value = "";
        foreach ($tags_post as $tag_post) {
            $value .= $tag_post->name . ',';
        }

        $all_tags = Tag::all();
        $categories = Category::all();
        $category = Category::find($post->category_id);
        return view('posts.edit')->with('post', $post)->with('categories', $categories)->with('cate', $category)->with('default_value', $value)->with('tags', $all_tags);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public
    function update($id, Request $request)
    {

        //dd($request->tags);
        $category = Category::where('slug', '=', $request->category)->get();
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->content = $request->input('content');
        $post->category_id = $category[0]->id;

        if ($request->status == 'on') {
            $post->status = 'publish';
        } else {
            $post->status = 'draft';
        }
        $post->save();


        $tags = explode(',', $request->tags[0]);

        $taggs = Tag::all();
        foreach ($taggs as $tagg) {
            $post->tags()->detach($tagg->id);
        }

        foreach ($tags as $tag) {
            $ta = \App\Tag::where('name', '=', $tag)->first();

            if ($ta) {
                $post->tags()->attach($ta->id);
            } else {
                $t = new \App\Tag();
                $t->name = $tag;
                $t->slug = str_slug($tag, '-');
                $t->save();
                $post->tags()->attach(\App\Tag::where('name', '=', $tag)->orderBy('id', 'desc')->first()->id);
            }
        }
        return redirect('backend/post');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public
    function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('backend/post');
    }


    public function list_post()
    {
        if (Auth::user()->id === 1) {
            $posts = Post::all();;
        } else {
            $user = User::find(Auth::user()->id);
            $posts = $user->posts()->get();
        }
        return view('posts.index')->with('posts', $posts);
    }

}

?>