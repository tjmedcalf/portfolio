<ul>
    <% loop $Menu(1) %>
        <li><a class="c-nav__link $LinkingMode" href="$Link" title="Go to the $Title page">$MenuTitle</a></li>
    <% end_loop %>
</ul>