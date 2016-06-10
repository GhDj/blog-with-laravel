



<h1>{{ $post->title }}</h1>
<hr>


<div id="preview"></div>

<textarea id="text-input" style="display: none">{{ $post->content }}</textarea>

<script src="{{ asset('assets/js/markdown.min.js') }}"></script>

<script>
    function Editor(input, preview) {
        this.update = function () {
            preview.innerHTML = markdown.toHTML(input.value);
        };
        input.editor = this;
        this.update();
    }
    var a = function (id) {
        return document.getElementById(id);
    };
    new Editor(a("text-input"), a("preview"));
</script>