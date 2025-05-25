<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Animado</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: linear-gradient(45deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
        }

        /* Animación de fondo con formas animales abstractas */
        .bg-animation {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .animal-shape {
            position: absolute;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .animal-shape:nth-child(1) {
            top: 10%;
            left: 10%;
            animation-delay: 0s;
            transform: rotate(0deg);
        }

        .animal-shape:nth-child(2) {
            top: 20%;
            right: 10%;
            animation-delay: 2s;
            transform: rotate(45deg);
        }

        .animal-shape:nth-child(3) {
            bottom: 30%;
            left: 20%;
            animation-delay: 4s;
            transform: rotate(90deg);
        }

        .animal-shape:nth-child(4) {
            bottom: 10%;
            right: 20%;
            animation-delay: 1s;
            transform: rotate(135deg);
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(10deg);
            }
        }

        /* Partículas flotantes */
        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: particle-float 8s linear infinite;
        }

        @keyframes particle-float {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        /* Estilos del login mejorado */
        .login-container {
            position: relative;
            z-index: 10;
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            box-shadow: 0 25px 45px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .login-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 35px 55px rgba(0, 0, 0, 0.15);
        }

        .login-title {
            color: white;
            font-weight: 600;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 2rem;
        }

        .form-label {
            color: white;
            font-weight: 500;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            color: white;
            backdrop-filter: blur(5px);
            transition: all 0.3s ease;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.25);
            border-color: rgba(255, 255, 255, 0.5);
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.2);
            color: white;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .btn-login {
            background: linear-gradient(45deg, #ff6b6b, #ffa500);
            border: none;
            border-radius: 10px;
            font-weight: 600;
            padding: 12px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            background: linear-gradient(45deg, #ff5252, #ff9800);
        }

        /* Generación dinámica de partículas */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }
    </style>
</head>

<body>
    <!-- Fondo animado -->
    <div class="bg-animation">
        <!-- Formas animales abstractas usando SVG -->
        <div class="animal-shape">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="white">
                <path d="M40 10 C60 10, 70 30, 70 40 C70 60, 50 70, 40 70 C30 70, 10 60, 10 40 C10 30, 20 10, 40 10 Z M25 35 C30 35, 30 45, 25 45 C20 45, 20 35, 25 35 Z M55 35 C60 35, 60 45, 55 45 C50 45, 50 35, 55 35 Z" />
            </svg>
        </div>
        <div class="animal-shape">
            <svg width="70" height="70" viewBox="0 0 70 70" fill="white">
                <path d="M35 5 C50 5, 65 20, 65 35 C65 50, 50 65, 35 65 C20 65, 5 50, 5 35 C5 20, 20 5, 35 5 Z M20 25 C25 25, 25 35, 20 35 C15 35, 15 25, 20 25 Z M50 25 C55 25, 55 35, 50 35 C45 35, 45 25, 50 25 Z M35 45 C40 45, 40 55, 35 55 C30 55, 30 45, 35 45 Z" />
            </svg>
        </div>
        <div class="animal-shape">
            <svg width="90" height="60" viewBox="0 0 90 60" fill="white">
                <ellipse cx="45" cy="30" rx="40" ry="25" />
                <circle cx="25" cy="20" r="5" />
                <circle cx="65" cy="20" r="5" />
                <path d="M30 35 Q45 45 60 35" stroke="white" stroke-width="2" fill="none" />
            </svg>
        </div>
        <div class="animal-shape">
            <svg width="60" height="80" viewBox="0 0 60 80" fill="white">
                <ellipse cx="30" cy="40" rx="25" ry="35" />
                <circle cx="20" cy="25" r="4" />
                <circle cx="40" cy="25" r="4" />
                <ellipse cx="30" cy="60" rx="15" ry="8" />
            </svg>
        </div>
    </div>

    <!-- Contenedor de partículas -->
    <div class="particles" id="particles"></div>

    <!-- Contenedor principal -->
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="login-container text-center p-5" style="width: 100%; max-width: 420px;">
            <h3 class="login-title">🐾 Iniciar Sesión</h3>
            <form>
                <div class="mb-4">
                    <label for="usuario" class="form-label">👤 Usuario</label>
                    <input type="text" name="usuario" id="usuario" class="form-control text-center" placeholder="Ingrese su usuario" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">🔒 Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control text-center" placeholder="Ingrese su contraseña" required>
                </div>
                <button type="submit" class="btn btn-login w-100">🚀 Ingresar</button>
            </form>
        </div>
    </div>

    <script>
        // Crear partículas flotantes dinámicamente
        function createParticles() {
            const particlesContainer = document.getElementById('particles');

            for (let i = 0; i < 20; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';

                // Tamaño aleatorio
                const size = Math.random() * 8 + 4;
                particle.style.width = size + 'px';
                particle.style.height = size + 'px';

                // Posición aleatoria
                particle.style.left = Math.random() * 100 + '%';

                // Delay aleatorio
                particle.style.animationDelay = Math.random() * 8 + 's';

                // Duración aleatoria
                particle.style.animationDuration = (Math.random() * 4 + 6) + 's';

                particlesContainer.appendChild(particle);
            }
        }

        // Inicializar partículas
        createParticles();

        // Efecto de enfoque suave en inputs
        const inputs = document.querySelectorAll('.form-control');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.style.transform = 'scale(1.02)';
            });

            input.addEventListener('blur', function() {
                this.style.transform = 'scale(1)';
            });
        });
    </script>
</body>

</html>