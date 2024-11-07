<option value="{{ $category->id }}">{{ $prefix }}{{ $category->name }}</option>

<!-- Nếu danh mục hiện tại có con, gọi lại partial để hiển thị danh mục con với prefix tăng lên -->
@if ($category->children->count() > 0)
    @foreach ($category->children as $childCategory)
        @include('admin.partials.category-option', ['category' => $childCategory, 'prefix' => $prefix . '|--- '])
    @endforeach
@endif
