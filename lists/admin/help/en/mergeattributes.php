<p>Notes for merging attributes.</p>
<p>Merging attributes means that the values for users will stay the same, but that
the actual attribute they belong to is merged into one. The attribute that will remain
is the first one (by listorder, as you see it in the page).</p>
<ul>
<li>You can only merge attributes that have the same type</li>
<li>When merging, the value of the first attribute will be kept if it exists, otherwise
it will be overwritten by the value of the attribute being merged into it. This can cause loss
of data, in case both attributes had a value. </li>
<li>If you merge attributes of type <i>checkbox</i> the resulting merged attribute will be of <i>checkboxgroup</i> type.</li>
<li>Attributes that are being merged into another one will be deleted after the merge.</li>
</ul>
