<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Lora:wght@400;600&display=swap" rel="stylesheet">
</head>

<style>
    .team {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            flex-wrap: wrap;
            margin: 2rem 5%;
        }

        .team .member {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 1rem;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 200px;
        }

        .team .member img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 1rem;
        }

        .team .member h4 {
            font-size: 1.2rem;
            font-family: 'Lora', serif;
            margin: 0.5rem 0;
            color: #333;
        }

        .team .member p {
            font-size: 0.9rem;
            color: #666;
        }
</style>
<body>
    <div class="team">
        <div class="member">
            <img src="/beeng.jpg" alt="Nama Developer">
            <h4>Meyrvan Maulana Nur Sasmito</h4>
            <p>Fullstack Developer</p>
        </div>
        <div class="member">
            <img src="developer2.jpg" alt="Nama Developer">
            <h4>Ahmad Algifari</h4>
            <p>Data Engineer</p>
        </div>
        <div class="member">
            <img src="developer3.jpg" alt="Nama Developer">
            <h4>Achmad Fauzan</h4>
            <p>Frontend Developer</p>
        </div>
        <div class="member">
            <img src="developer4.jpg" alt="Nama Developer">
            <h4>Rafiza Araihan</h4>
            <p>UI/UX Designer</p>
        </div>
    </div>
</body>
</html>