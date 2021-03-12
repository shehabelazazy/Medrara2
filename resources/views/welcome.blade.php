<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>View Products | Product Store</title>
    <!-- Styles etc. -->
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h1>Here's a list of available products</h1>
            <table>
                <thead>
                    <td>Name</td>
                    <td>organization</td>
                    <td>Location</td>
                    <td>Balance</td>
                </thead>
                <tbody>
                    @foreach ($query as $datas)
                        <tr>
                            <td class="inner-table">datas</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
