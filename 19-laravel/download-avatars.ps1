# Ruta base de tu proyecto (ajusta si está en otro sitio)
$projectPath = "C:\Users\SENA\Desktop\adso2929061B\19-laravel"

# Carpeta donde vamos a guardar las imagenes
$imagesPath = Join-Path $projectPath "public\images"

# Crear la carpeta si no existe
if (-not (Test-Path $imagesPath)) {
    New-Item -ItemType Directory -Path $imagesPath | Out-Null
}

# Descarga de imagenes de hombres (user1.jpg ... user25.jpg)
for ($i = 1; $i -le 25; $i++) {
    $url = "https://xsgames.co/randomusers/assets/avatars/male/$i.jpg"
    $fileName = "user$($i).jpg"
    $destination = Join-Path $imagesPath $fileName

    Write-Host "Descargando $url -> $destination"
    Invoke-WebRequest -Uri $url -OutFile $destination
}

# Descarga de imagenes de mujeres (user26.jpg ... user50.jpg)
for ($i = 26; $i -le 50; $i++) {
    $url = "https://xsgames.co/randomusers/assets/avatars/female/$($i-25).jpg"
    $fileName = "user$($i).jpg"
    $destination = Join-Path $imagesPath $fileName

    Write-Host "Descargando $url -> $destination"
    Invoke-WebRequest -Uri $url -OutFile $destination
}

Write-Host "Listo. Imagenes descargadas en $imagesPath"