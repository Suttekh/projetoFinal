<div class="container  mb-0">
    <div class="display-4 text-primary"> <h1 class="text-center">Contato</h1></div>
    <div class="col-4 offset-4 mb-5">

        <form action="?pg=cad_mensagem" method="POST">
            <div class="form-group ">
                <label for="nome"><strong>Nome</strong></label>
                <input type="text" name="nome" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group ">
                <label for="inputEmail4"><strong>Email</strong></label>
                <input type="text" name="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>

            <div class="btn-group btn-group-toggle" data-toggle="buttons">
  <label class="btn btn-secondary active  ml-5">
    <input type="radio" name="cat" id="option1" value="elogios" autocomplete="off" checked> Elogios
  </label>
  <label class="btn btn-secondary ml-1 mr-1">
    <input type="radio" name="cat" id="option2" value="vendas" autocomplete="off"> Vendas
  </label>
  <label class="btn btn-secondary mr-5">
    <input type="radio" name="cat" id="option3" value="reclamacoes" autocomplete="off"> Reclamações
  </label>
</div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensagem</label>
                <textarea class="form-control" name="msg" id="xampleFormControlTextarea1" placeholder="Escreva sua mensagem" rows="3"></textarea>

            </div>

            <div class="form-group text-right">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Enviar
                    <span class="regi-send"></span>
                </button>
            </div>
        </form>
    </div>
</div>