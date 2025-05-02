<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do Usuário</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .center-container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .info-card {
            width: 100%;
            max-width: 600px;
            padding: 2rem;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="center-container">
        <div class="info-card card">
            <div class="card-body text-center">
                <h1 class="card-title mb-4">Informações do Usuário</h1>
                
                <?php
                // Captura o IP do usuário
                $ip = $_SERVER['REMOTE_ADDR'];
                
                // Verifica se está usando um proxy
                if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                }
                
                // Captura o User Agent
                $userAgent = $_SERVER['HTTP_USER_AGENT'];
                ?>
                
                <div class="mb-3">
                    <h5>Endereço IP:</h5>
                    <p class="text-muted"><?php echo htmlspecialchars($ip); ?></p>
                </div>
                
                <div class="mb-3">
                    <h5>User Agent:</h5>
                    <p class="text-muted"><?php echo htmlspecialchars($userAgent); ?></p>
                </div>
                
                <div class="mt-4">
                    <a href="https://www.100security.com.br" target="_blank" class="btn btn-primary">
                        Visitar 100Security
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>