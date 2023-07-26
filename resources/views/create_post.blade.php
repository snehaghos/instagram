
<form method="POST" action="{{ route('post.save') }}" enctype="multipart/form-data">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    @csrf
        <div class="post_form m-5">
            <div class="form_contents w-50 border border-2 mx-auto p-5 bg-dark">
                <input name="post_title" placeholder="Post title" class="form-control mb-3 ">
                <input name="post_description" placeholder="Post-description" class="form-control mb-3">
                <input type="file" name="post_image" id="post_image" class="form-control mb-4">
                <div>
                    <button type="submit" class="w-100 rounded p-1 btn btn-success">Save</button>
                </div>
            </div>

        </div>
</form>
