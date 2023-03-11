<div class="row justify-content-center ml-0 mr-0 h-100">
    <div class="card w-100">
        <div class="card-header">新規メモ作成</div>
        <div class="card-body">
            <form action="{{ route('user_register.store') }}" method="POST">
                @csrf
                <div class="form-group">
                     <input name='name' class="form-control"></input>
                </div>
                <x-primary-button class="ml-3">
                 {{ __('登録') }}
                 </x-primary-button>
            </form>
        </div>
    </div>
</div>