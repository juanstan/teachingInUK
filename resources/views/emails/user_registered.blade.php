<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User Registration</title>
</head>
'userNationality' => $this->user->nationality,
                        'userDegree' => $this->user->degree,
                        'userDoB' => $this->user->dob,
                        'userEnglishLevel' => $this->user->english_level,
                        'userTraining' => $this->user->training,
                        'userExperience' => $this->user->experience,
                        'userReferees' => $this->user->referees,
<body>
    <h1>New User Registered</h1>
    <p>Name: {{ $userName }}</p>
    <p>Nationality: {{ $userNationality}}</p>
    <p>Degree: {{ $userDegree }}</p>
    <p>Dob: {{ $userDoB }}</p>
    <p>English Level: {{ $userEnglishLevel }}</p>
    <p>Training: {{ $userTraining }}</p>
    <p>Experience: {{ $userExperience }}</p>
    <p>References: {{ $userReferees }}</p>
    <p>Thank you for registering!</p>
</body>
</html>
