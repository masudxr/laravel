<x-layout>
    <section class="py-8 max-w-md max-auto">
        <h1>
            Publish New Post
        </h1>
        <div class="border border-gray-200 p-6 rounded-xl max-w-sm max-auto">

            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf

                <x-form.input name="title" />
                <x-form.input name="slug" />
                <x-form.input name="thumbnail" type="file" />
                <x-form.textarea name="excerpt" />
                <x-form.textarea name="body" />

                <div class="mb-6">

                    <x-form.label name="category" />

                    <select name="category_id" id="category">

                        @foreach(\App\Models\Category::all() as $category)

                        <option value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                        @endforeach
                    </select>

                    <x-form.error name="category" />

                </div>

                <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">
                    Publish
                </button>

            </form>
        </div>


    </section>
</x-layout>