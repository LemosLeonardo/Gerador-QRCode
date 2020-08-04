function cont() {
    var conteudo = document.getElementById('print').innerHTML;
    tela_impressao = window.open('document');
    tela_impressao.document.write(conteudo);
    tela_impressao.window.print();
    tela_impressao.window.close();
}