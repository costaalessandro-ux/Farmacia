function confirmaExclusao(idprod){
    let opcao = confirm("Deseja excluir este Produto ?");
    if(opcao===true){
       window.location.href= "deleteProduto.php?idprod=" + idprod;
    }  
}

function confirmaAlteracao(idprod){
    let opcao = confirm("Deseja alterar este Produto ?");
    if(opcao===true){
       window.location.href= "alterServlet?id=" + idprod;
    }  
}