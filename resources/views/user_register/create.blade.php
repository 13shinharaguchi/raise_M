<div class="row justify-content-center ml-0 mr-0 h-100">
    <div class="card w-100">
        <div class="card-header">ユーザ名の登録</div>
        <p>ここでは名前の登録をしないとエラーになってしまう</p>
        <div class="card-body">
            <!--ユーザー名を登録する、routeのuser_register.storeで処理してもらう-->
            <form action="{{ route('user_register.store') }}" method="POST">
                @csrf
                <div class="form-group">
                     <input name='name' class="form-control"></input>
                </div>
                <x-primary-button class="ml-3">
                 {{ __('やってみたいことの登録に進む') }}
                 </x-primary-button>
            </form>
        </div>
    </div>
</div>