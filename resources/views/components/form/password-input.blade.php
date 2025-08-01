<div class="password-input-area">
    <input class="@error($name) is-invalid @enderror" name="{{ $name }}" type="password" id="{{ $id }}"
        placeholder="{{ $placeholder }}" />
    <img src="/assets/icons/eyeIcon.png" alt="Ícone mostrar/Ocultar senha"
        onclick="togglePasswordVisibility('{{ $id }}')"/>
</div>

<script>
    if(typeof togglePasswordVisibility !== 'function'){
        function togglePasswordVisibility(inputId){
            const input = document.getElementById(inputId);
            if(input.type == 'password'){
                input.type == 'text';
            } else {
                input.type = 'password';
            }
        }
    }
</script>
