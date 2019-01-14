<section>
    <%-- Hero Section.. --%>
</section>
    
<section>
    <header>
        <h2>Featured Case Studies</h2>
    </header>

    <div>
        <ul>
            <% loop FeaturedCS() %>
                <li>$Title</li>
            <% end_loop %>
        </ul>
    </div>
</section>

<section>
    <header>
        <h2>Recent Work</h2>
    </header>

    <div>
        <ul>
            <% loop RecentWork() %>
                <li>$Title</li>
            <% end_loop %>
        </ul>
    </div>
</section>

<section>
    $Content
</section>