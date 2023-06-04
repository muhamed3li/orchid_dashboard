
<div class="form-group">
    <input id="my-input" class="form-control" type="text" value="{{ !empty($post) ? $post->title : '' }}" name="post[title][en]">
</div>

<div class="form-group">
    <textarea class="form-control no-resize" name="post[description][en]" id="" cols="30" rows="10">{{!empty($post) ? $post->description : ''}}</textarea>
</div>

