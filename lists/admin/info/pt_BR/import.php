
<p>

<h3>Importar emails para as listas existentes</h3>

Existem quatro formas de importar as informa&ccedil;&otilde;es existentes:

<ul>
<li><?php echo PageLink2('import2', 'Importar emails com diferentes atributos');?>. A lista de e-mails pode ter atributos que ainda n&atilde;o estejam definidos. Eles podem ser criados automaticamente como atributos tipo "linha de texto". Voc&ecirc; deve usar esta op&ccedil;&atilde;o, se estiver importando uma planinha/arquivo CSV nos quais os atributos dos usu&aacute;rios est&atilde;o organizados em colunas e um usu&aacute;rio por linha. <br/><br/>
<li><?php echo PageLink2('import1', 'Importar emails com os mesmos atributos');?>. A lista de email deve ter regras de acordo com a estrutura que voc&ecirc; j&aacute; configurou em <?php echo NAME?>. Voc&ecirc; deve usar esta op&ccedil;&atilde;o se estiver importando uma lista de emails simples. Voc&ecirc; pode especificar os valores para os atributos de cada entrada. Eles ser&atilde;o os mesmos para todos os que voc&ecirc; estiver importando.<br/><br/>
<li><?php echo PageLink2('import3', 'Importar emails de uma conta IMAP');?>. Buscar&aacute; pelos emails nas suas pastas IMAP e os adicionar&aacute;. Somente o Nome da pessoa pode ser reconhecido como atributo.<br/><br/>
<li><?php echo PageLink2('import4', 'Importar emails de uma outra base de dados');?>.
</ul>

</p>
