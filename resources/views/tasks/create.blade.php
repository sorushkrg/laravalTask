@extends('layout.app')

@push('namePage')
    {{ $title }}
@endpush

@push('datePicker_style')
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
@endpush

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center mb-4">ایجاد تسک</h2>
                <form action="{{ route('task.createPost') }}" method="POST" enctype="multipart/form-data"
                    class="card p-4 shadow-sm">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">موضوع تسک</label>
                        <input type="text" class="form-control" id="title" name="title" maxlength="50">
                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">توضیحات</label>
                        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">وضعیت</label>
                        <select class="form-select" id="status" name="status">
                            <option value="in_progress">In Progress</option>
                            <option value="completed">Completed</option>
                            <option value="canceled">Canceled</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="deadline" class="form-label">تاریخ اتمام پروژه</label>
                        <input type="datetime-local" class="form-control" id="deadline" name="deadline"
                            placeholder="YYYY-MM-DD HH:mm">
                        @error('deadline')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="files" class="form-label">اپلود فایل</label>
                        <input type="file" class="form-control" id="files" name="files[]" multiple>
                        @error('files')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success w-100">ایجاد تسک</button>
                </form>
            </div>
        </div>
    </div>
@endsection


@push('datePicker_script')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        flatpickr("#deadline", {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            time_24hr: true
        });
    </script>
@endpush
