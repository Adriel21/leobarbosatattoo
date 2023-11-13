</div>
</main>

<footer class="footer mt-auto py-3 bg-light border-top">
    <div class="container text-center">
        SunioWeb Gestão e Tecnologia&copy; 2023
    </div>
</footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/trumbowyg.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/langs/pt_br.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/plugins/emoji/ui/trumbowyg.emoji.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script> 






<script>
        $('#trumbowyg-editor').trumbowyg({
            lang: 'pt_br',
            btns: [
                ['viewHTML'],
                ['undo', 'redo'], // Only supported in Blink browsers
                ['formatting'],
                ['indent', 'outdent'],
                ['strong', 'em', 'del'],
                ['superscript', 'subscript'],
                ['link'],
                ['insertImage'],
                ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                ['unorderedList', 'orderedList'],
                ['horizontalRule'],
                ['removeformat'],
                ['fullscreen'],
                ['emoji']

            ],
            autogrow: true
        });
</script>

<script>
    /* SCRIPT PARA CONTAGEM DE CARACTERES DO CAMPO TEXTAREA RESUMO
    -Usado nas páginas noticia-insere.php e noticia-atualiza.php */
    
    // Elementos a serem manipulados
    const spanMaximo = document.querySelector("#maximo");
    const textResumo = document.querySelector("#resumo");
    
    // Obtendo e exibindo a quantidade atual de caracteres do resumo (página noticia-atualiza.php)
    let quantidadeAtual = textResumo.value.length;
    spanMaximo.textContent = quantidadeAtual;
    
    // Monitor de evento de digitação de caracteres no campo resumo
    textResumo.addEventListener("input", function(){
    
      // Obtendo e exibindo a quantidade de caracteres digitados
      let quantidadeDigitada = textResumo.value.length;
      spanMaximo.textContent = quantidadeDigitada;
    
      // Ajustando as classes de acordo com a quantidade digitada
      if(quantidadeDigitada == 160 || quantidadeDigitada == 0){
        spanMaximo.classList.remove("bg-success");
        spanMaximo.classList.add("bg-danger");
      } else {
        spanMaximo.classList.remove("bg-danger");
        spanMaximo.classList.add("bg-success");
      }
    });
</script>

<script>
    /* SCRIPT PARA CONTAGEM DE CARACTERES DO CAMPO TEXTAREA RESUMO
    -Usado nas páginas noticia-insere.php e noticia-atualiza.php */
    
    // Elementos a serem manipulados
    const spanMaximoo = document.querySelector("#maximoo");
    const textTitulo = document.querySelector("#titulo");
    
    // Obtendo e exibindo a quantidade atual de caracteres do resumo (página noticia-atualiza.php)
    let quantidadeAtualTitulo = textTitulo.value.length;
    spanMaximo.textContent = quantidadeAtualTitulo;
    
    // Monitor de evento de digitação de caracteres no campo resumo
    textTitulo.addEventListener("input", function(){
    
      // Obtendo e exibindo a quantidade de caracteres digitados
      let quantidadeDigitadaTitulo = textTitulo.value.length;
      spanMaximoo.textContent = quantidadeDigitadaTitulo;
    
      // Ajustando as classes de acordo com a quantidade digitada
      if(quantidadeDigitadaTitulo == 75 || quantidadeDigitadaTitulo == 0){
        spanMaximoo.classList.remove("bg-success");
        spanMaximoo.classList.add("bg-danger");
      } else {
        spanMaximoo.classList.remove("bg-danger");
        spanMaximoo.classList.add("bg-success");
      }
    });
</script>

<script>

document.addEventListener('DOMContentLoaded', function(){
    document.querySelector("#imagem").addEventListener("change", function(imagem){
        const arquivo = imagem.target.files.item(0);
        const endereco = new FileReader();
        const modal = document.querySelector('.modal-none');
        const overlay = document.querySelector('.overlay-none');

        modal.classList.remove('modal-none');
        modal.classList.add('modal-block');

        overlay.classList.remove('overlay-none');
        overlay.classList.add('overlay');
        endereco.onloadend = function() {
            document.querySelector("#img").setAttribute("src", endereco.result);
        }
        endereco.readAsDataURL(arquivo);
    });
});

</script>
</body>
</html>
