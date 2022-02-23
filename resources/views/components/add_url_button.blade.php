<!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#add_url">
    إصافة رابط جديد
</button>

<!-- Modal -->
<div class="modal fade" id="add_url" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="modal-title text-white" id="exampleModalLabel">إضافة رابط جديد</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('add_url') }}" method="POST">
                <div class="modal-body">

                    @csrf

                    <div class="mb-3">
                        <label for="orginal_url" class="form-label fs-6">ادخل اسم الموقع الخاص بك</label>
                        <input type="text" name="name" class="form-control" id="orginal_url" placeholder="ادخل اسم موقعك الخاص">
                    </div>

                    <div class="mb-3">
                        <label for="orginal_url" class="form-label fs-6">ادخل رابط الموقع الجديد الخاص بك</label>
                        <input type="text" name="url" class="form-control" id="orginal_url" placeholder="رابط الموقع">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm">إختصر الرابط</button>
                </div>
            </form>
        </div>
    </div>
</div>
