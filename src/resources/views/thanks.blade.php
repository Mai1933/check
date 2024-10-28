<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
    <title>Thanks</title>
</head>

<body>
    <main>
        <div class="thanks">
            <div class="thanks_back">
                <span class="thanks_back-logo">Thank you</span>
            </div>
            <div class="thanks_content">
                <form action="/" method="post">
                    @csrf
                    <div class="thanks_sentence">
                        <span class="thanks_sentence-content">お問い合わせありがとうございました</span>
                    </div>
                    <div class="home_button">
                        <button class="button_return" type="submit">HOME</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>