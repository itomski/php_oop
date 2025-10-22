<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <title>Document</title>
</head>
<body>
    {include file="main-nav.tpl"}
    <main class="container">
        <h1>{$title}</h1>
        
        <table>
            <thead>
                <tr>
                    <th>Vorname</th>
                    <th>Nachname</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$content item=kunde}
                <tr>
                    <td>{$kunde->getVorname()}</td>
                    <td>{$kunde->getNachname()}</td>
                </tr>
                {/foreach}
            </tbody>
        </table>

    </main>
</body>
</html>