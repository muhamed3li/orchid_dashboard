<div class="form-group">
    <input id="my-input" class="form-control" type="text" value="{{ !empty($post) ? $post->getTranslation('title','ar') : '' }}" name="post[title][ar]">
</div>

<div class="form-group">
    <textarea class="form-control no-resize" name="post[description][ar]" id="" cols="30" rows="10">{{!empty($post) ? $post->getTranslation('description','ar') : ''}}</textarea>
</div>