<!doctype html>
<html>
    <head>
        <% base_tag %>
        $MetaTags
    </head>
    <body>
        <header>
            <a href="$AbsoluteBaseURL">Logo</a>
            
            <% include MainNav %>
        </header>

        <section class="content">
            $Layout
        </section>

        <footer>
            <section>
                <h2>Case Studies</h2>
                <ul>
                    <% loop FooterCS() %>
                        <li>$Title</li>
                    <% end_loop %>
                </ul>
            </section>

            <section>
                <h2>Work</h2>
                <ul>
                    <% loop WorkCategories() %>
                        <li>$Title</li>
                    <% end_loop %>
                </ul>
            </section>

            <section>
                <h2><a href="/about-us">About</a></h2>
            </section>
        </footer>
    </body>
</html>