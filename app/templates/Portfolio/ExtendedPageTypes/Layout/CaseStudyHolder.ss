<h1>$Title</h1>

<section>
    <% loop $Children %>
        <div>
            <% if $CS_Image %>
                <% with $CS_Image.ScaleWidth(100) %>
                    <img src="$Url" alt="" width="$Width" height="$Height" />
                <% end_with %>
            <% end_if %>
            <header>
                <h2><a href="$Link">$Title</a></h2>
                <small>$Date.Format('yyyy')</small>
            </header>
            <% if $Tags %>
                <ul>
                <% loop $Tags %>
                    <li>$IconCode | $Title</li>
                <% end_loop %>
                </ul>
            <% end_if %>
        </div>
    <% end_loop %>
</section>