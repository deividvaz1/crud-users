<!-- formulário de criação de usuário com o que é pedido no teste -->
<div class="container" style="margin-top: 13px;">
    <div class="row">
        <div class="">
            <form method="POST" action="{{ route('usuarios.store') }}">
                @csrf

                <div class="row">
                    <div class="input-field col s12">
                        <input
                            name="name"
                            id="name"
                            type="text"
                            placeholder="Digite seu nome"
                            class="validate"
                            required
                        />
                        <label for="name" style="color: black;">Nome</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input
                            name="email"
                            id="email_address"
                            type="email"
                            placeholder="fulano.teste@email.com"
                            class="validate"
                            required
                        />
                        <label for="email_address" style="color: black;">Email</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input
                            name="cpf"
                            id="cpf"
                            type="text"
                            placeholder="000.000.000-00"
                            class="validate"
                            required
                        />
                        <label for="cpf" style="color: black;">CPF</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input
                            name="data_nascimento"
                            id="data_nascimento"
                            type="text"
                            placeholder="00/00/0000"
                            class="validate"
                            required
                        />
                        <label for="data_nascimento" style="color: black;">Data de Nascimento</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input
                            name="telefone"
                            id="telefone"
                            type="text"
                            placeholder="(51) 99999-9999"
                            class="validate"
                            required
                        />
                        <label for="telefone" style="color: black;">Telefone</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input
                            name="password"
                            id="password"
                            type="password"
                            placeholder="(deve ter no mínimo 6 caracteres)"
                            class="validate"
                            minlength="6"
                            required
                        />
                        <label for="password" style="color: black;">Senha</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input
                            name="password_confirmation"
                            id="password_confirmation"
                            type="password"
                            placeholder="Confirme sua senha"
                            class="validate"
                            required
                        />
                        <label for="password_confirmation" style="color: black;">Confirmar Senha</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <button type="submit" class="btn waves-effect waves-light red">
                            Cadastrar usuário
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- javascript para cuidar da formatação do formulario-->
<script src="https://unpkg.com/vanilla-masker/build/vanilla-masker.min.js"></script>
<script>
    VMasker(document.getElementById("cpf")).maskPattern("999.999.999-99");
    VMasker(document.getElementById("telefone")).maskPattern("(99) 99999-9999");
    VMasker(document.getElementById("data_nascimento")).maskPattern("99/99/9999");
</script>
