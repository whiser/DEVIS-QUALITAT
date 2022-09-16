<style>



  ._table {
      width: 100%;
      border-collapse: collapse;
  }

  ._table :is(th, td) {
      border: 1px solid #0002;
      padding: 8px 10px;
  }

  /* form field design start */
  .form_control {
      border: 1px solid #0002;
      background-color: transparent;
      outline: none;
      padding: 8px 12px;
      font-family: 1.2rem;
      width: 100%;
      color: #333;
      font-family: Arial, Helvetica, sans-serif;
      transition: 0.3s ease-in-out;
  }

  .form_control::placeholder {
      color: inherit;
      opacity: 0.5;
  }

  .form_control:is(:focus, :hover) {
      box-shadow: inset 0 1px 6px #0002;
  }

  /* form field design end */


  .success {
      background-color: #24b96f !important;
  }

  .warning {
      background-color: #ebba33 !important;
  }

  .primary {
      background-color: #259dff !important;
  }

  .secondery {
      background-color: #00bcd4 !important;
  }

  .danger {
      background-color: #ff5722 !important;
  }

  .action_container {
      display: inline-flex;
  }

  .action_container>* {
      border: none;
      outline: none;
      color: #fff;
      text-decoration: none;
      display: inline-block;
      padding: 8px 14px;
      cursor: pointer;
      transition: 0.3s ease-in-out;
  }

  .action_container>*+* {
      border-left: 1px solid #fff5;
  }

  .action_container>*:hover {
      filter: hue-rotate(-20deg) brightness(0.97);
      transform: scale(1.05);
      border-color: transparent;
      box-shadow: 0 2px 10px #0004;
      border-radius: 2px;
  }

  .action_container>*:active {
      transition: unset;
      transform: scale(.95);
  }
</style>
<div class="container">
    <label for="name">Nom du client : </label>
    <input type="text" class="form_control" placeholder="jean du pont"> <br><br>

    <label for="appareil">Ajouter les appareils</label> <br><br>
  <table class="_table">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Tension</th>
        <th>Intensité</th>
        <th>Ennergie</th>
        <th>Puissance</th>
        <th width="50px">
          <div class="action_container">
            <button class="success" onclick="create_tr('table_body')">
              <i class="fa fa-plus"></i>
            </button>
          </div>
        </th>
      </tr>
    </thead>
    <tbody id="table_body">
      <tr>
        <td>
          <input type="text" class="form_control" placeholder="Télé">
        </td>
        <td>
          <input type="text" class="form_control" placeholder="100">
        </td>
        <td>
          <input type="text" class="form_control" placeholder="50">
        </td>
        <td>
          <input type="text" class="form_control" placeholder="50">
        </td>
        <td>
          <input type="text" class="form_control" placeholder="50">
        </td>
        <td>
          <div class="action_container">
            <button class="danger" onclick="remove_tr(this)">
              Supprimer
            </button>
          </div>
        </td>
      </tr>
    </tbody>
    <tfoot>
        <tr>
            <td style="text-align: center; background-color: #e6e6e6 !important;" colspan="3">Energie Totale</td>
            <td ></td>
        </tr>
        <tr>
            <td style="text-align: center; background-color: #e6e6e6 !important;" colspan="4">Puissance Totale</td>
            <td ></td>
        </tr>
    </tfoot>
  </table>
</div>


<script>
    function create_tr(table_id) {
    let table_body = document.getElementById(table_id),
        first_tr   = table_body.firstElementChild
        tr_clone   = first_tr.cloneNode(true);

    table_body.append(tr_clone);

    clean_first_tr(table_body.firstElementChild);
}

function clean_first_tr(firstTr) {
    let children = firstTr.children;
    
    children = Array.isArray(children) ? children : Object.values(children);
    children.forEach(x=>{
        if(x !== firstTr.lastElementChild)
        {
            x.firstElementChild.value = '';
        }
    });
}



function remove_tr(This) {
    if(This.closest('tbody').childElementCount == 1)
    {
        alert("You Don't have Permission to Delete This ?");
    }else{
        This.closest('tr').remove();
    }
}
</script>