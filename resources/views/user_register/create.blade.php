<div class="row justify-content-center ml-0 mr-0 h-100">
    <div class="card w-100">
        <h1>ユーザ名の登録</h1>         
        <div>
            <form action="{{ route('user_register.store') }}" method="POST">
                @csrf
                <div>
                     <x-text-input name='name' required autofocus />
                </div>
                <x-primary-button>
                 {{ __('やってみたいことの登録に進む') }}
                 </x-primary-button>
            </form>
        </div>
    </div>
</div>