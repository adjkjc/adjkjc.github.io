
<p>

<h3>E-mail címek importálása már létező listákba</h3>

A meglévő információk importálásának négyféle módja van:

<ul>
<li><?php echo PageLink2('import2', 'Különféle értékű tulajdonságokkal rendelkező e-mailek importálása');?>. Az e-mail címlistán szerepelhetnek még nem meghatározott tulajdonságok. Létrehozásuk "szövegsor" attribútumként automatikusan történik. Ezt a lehetőséget akkor használja, ha olyan munkalapot/CSV-fájlt importál, melynek oszlopaiban megtalálhatók a felhasználók tulajdonságai, és soronként egy felhasználó van. <br/><br/>
<li><?php echo PageLink2('import1', 'Az azonos értékű tulajdonságokkal rendelkező e-mail címek importálása');?>. Az e-mail címlistának meg kell egyeznie az Ön által már a <?php echo NAME?> listán kialakított szerkezettel. Ezt a lehetőséget egyszerű e-mail címlista importálásakor használja. Ezt követően megadhatja mindegyik bejegyzés tulajdonságának értékét. Minden importált cím esetén ugyanazok lesznek.<br/><br/>
<li><?php echo PageLink2('import3', 'E-mail címek importálása IMAP-fiókból');?>. Megkeresi az Ön IMAP-mappáiban lévő e-mail címeket, s importálja azokat. Csak a személy neve található tulajdonságként.<br/><br/>
<li><?php echo PageLink2('import4', 'E-mail címek importálása másik adatbázisból');?>.
</ul>

</p>
