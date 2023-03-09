<div class="row justify-content-center ml-0 mr-0 h-100">
    <div class="card w-100">
        <div class="card-header">新規メモ作成</div>
        <div class="card-body">
            <form action="{{ route('user_register.store') }}" method="POST">
                @csrf
                <div class="form-group">
                     <input name='name' class="form-control"></input>
                </div>
                <button type='submit' class="btn btn-primary btn-lg">保存</button>
            </form>
        </div>
    </div>
</div>