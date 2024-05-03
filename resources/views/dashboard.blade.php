<script src="assets/vendor/ckeditor5/build/ckeditor.js"></script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{route('store.post')}}">
                        @csrf
                        <h1>Welcome to CKEditor&nbsp;5 in Laravel</h1>
                        <textarea name="content" id="editor"></textarea>
                        <button type="submit" class="btn btn-success">Success</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ), {
            simpleUpload: {
                // The URL that the images are uploaded to.
                uploadUrl: '{{route('store.image.ckeditor')}}',
            }
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
