<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        .team-container {
            display: none;
            text-align: center;
            padding: 40px;
            border: 2px solid #ccc;
            border-radius: 50px;
            background-color: #528aba; 
            opacity: 0;
            transform: translateX(-100%);
            animation: fadeAndSlideIn 1.5s ease-out forwards;
        }

        img {
            max-width: 150px;
            max-height: 150px;
            margin-bottom: 20px;
        }

        .icon {
            margin-right: 8px;
        }

        h1, h2 {
            font-size: 24px;
            margin: 10px 0;
        }

        @keyframes fadeAndSlideIn {
            0% {
                opacity: 0;
                transform: translateX(-100%);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        #teamInfoButton {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 18px;
            padding: 10px;
            cursor: pointer;
        }
    </style>
    <title>Team Information</title>
</head>
<body>

<button id="teamInfoButton" onclick="hideButton()">Team Information</button>

@foreach($matches as $match)
    <div class="team-container" id="team{{ $match->team1->id }}">
        <img src="{{ asset('storage/' . $match->team1->logo) }}" alt="{{ $match->team1->name }} Logo">
        <h1>{{ $match->team1->name }}</h1>
        
        <div class="container">
            @foreach($match->team1->players as $player)
                <h2>
                    <span class="icon"><i class="fas fa-user"></i></span> 
                    {{ $player->name }}
                </h2>
            @endforeach
        </div>
    </div>

    <div class="team-container" id="team{{ $match->team2->id }}">
        <img src="{{ asset('storage/' . $match->team2->logo) }}" alt="{{ $match->team2->name }} Logo">
        <h1>{{ $match->team2->name }}</h1>
        
        <div class="container">
            @foreach($match->team2->players as $player)
                <h2>
                    <span class="icon"><i class="fas fa-user"></i></span> 
                    {{ $player->name }}
                </h2>
            @endforeach
        </div>
    </div>
@endforeach

<script>
    function hideButton() {
        @foreach($matches as $match)
            document.getElementById('team{{ $match->team1->id }}').style.display = 'block';
            document.getElementById('team{{ $match->team2->id }}').style.display = 'block';
        @endforeach

        document.getElementById('teamInfoButton').style.display = 'none';
    }
</script>

</body>
</html>
