<div class="container">
    <h1 class="text-center">Cadastrar Tomador de Serviço</h1>
    <form action="index.php?page=sal-ts" method="post">

        <input type="hidden" name="acao" value="cadastrar" />

        <div class="form-group">

            <label for="nome_ts">Nome/Razao Social</label>
            <input type="text" name="nome_ts" class="form-control" placeholder="Nome ou Razão Social" />

        </div>
        <div class="form-group">

            <label for="tipo_documento_ts" class="form-control form-control-sm">Tipo de Documento</label>
            <select id="tipo_documento_ts" class="form-control" name="tipo_documento_ts">
                <option value="CPF">CPF</option>
                <option value="CNPJ">CNPJ</option>
            </select>
        </div>
        <div class="form-group">

            <label for="documento_ts">Nº Documento</label>
            <input type="text" name="documento_ts" class="form-control" placeholder="Nº Documento" />

        </div>

        <div class="form-group">

            <label for="inscricao_estadual_ts">Inscrição Estadual</label>
            <input type="text" name="inscricao_estadual_ts" class="form-control" placeholder="Nº Inscrição Estadual" />

        </div>

        <div class="form-group">

            <label for="telefone_ts">Telefone</label>
            <input type="text" name="telefone_ts" class="form-control" placeholder="Telefone para Contato" />

        </div>

        <div class="form-group">

            <label for="email_ts">Email</label>
            <input type="text" name="email_ts" class="form-control" placeholder="Email" />

        </div>

        <div class="form-group">

            <label for="logradouro_ts">Logradouro</label>
            <input type="text" name="logradouro_ts" class="form-control" placeholder="Endereço :Logradouro" />

        </div>

        <div class="form-group">

            <label for="n_ts">Nº</label>
            <input type="text" name="n_ts" class="form-control" placeholder="Endereço: Nº" />

        </div>

        <div class="form-group">

            <label for="pais_ts">País</label>
            <input type="text" name="pais_ts" class="form-control" placeholder="Endereço: País" />

        </div>

        <div class="form-group">

            <label for="complemento_ts">Complemento</label>
            <input type="text" name="complemento_ts" class="form-control" placeholder="Endereço: Complemento" />

        </div>

        <div class="form-group">

            <label for="uf_ts" class="form-control form-control-sm">UF</label>
            <select id="uf_ts" name="uf_ts" class="form-control">
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
                <option value="EX">Estrangeiro</option>
            </select>

        </div>

        <div class="form-group">

            <label for="bairro_ts">Bairro</label>
            <input type="text" name="bairro_ts" class="form-control" placeholder="Endereço: Bairro" />

        </div>

        <div class="form-group">

            <label for="municipio_ts">Município</label>
            <input type="text" name="municipio_ts" class="form-control" placeholder="Endereço: Município" />

        </div>

        <div class="form-group">

            <label for="cep_ts">CEP</label>
            <input type="text" name="cep_ts" class="form-control" placeholder="Endereço: CEP" />

        </div>



        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
</div>
</form>