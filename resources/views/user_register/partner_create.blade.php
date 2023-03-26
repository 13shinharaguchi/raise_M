<div class="row justify-content-center ml-0 mr-0 h-100">
    <div>
        <h1>パートナー名の登録</h1>         
        <div>
            <!--ユーザー名を登録する、routeのuser_register.storeで処理してもらう-->
            <form action="{{ route('partner_register_store') }}" method="POST">
                @csrf
                <div>
                     <x-text-input name='name' class="form-control" required autofocus />
                </div>
                <x-primary-button>
                 {{ __('登録する') }}
                 </x-primary-button>
            </form>
        </div>
    </div>
</div>