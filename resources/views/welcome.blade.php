<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Evident - Opening</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', 'Times New Roman', serif;
            overflow: hidden;
            background: #f8f8f8;
        }

        /* Curtain container - fixed positioning to cover entire viewport */
        .curtain-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            z-index: 9999;
        }

        /* Left curtain panel - dark elegant color */
        .curtain-left {
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            background: linear-gradient(to right, #2c2c2c, #1a1a1a);
            box-shadow: 3px 0 20px rgba(0, 0, 0, 0.5);
            /* Animation: slide out to the left after 2s delay */
            animation: slideOutLeft 1.2s ease-in-out 2s forwards;
        }

        /* Right curtain panel - dark elegant color */
        .curtain-right {
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            height: 100%;
            background: linear-gradient(to left, #2c2c2c, #1a1a1a);
            box-shadow: -3px 0 20px rgba(0, 0, 0, 0.5);
            /* Animation: slide out to the right after 2s delay */
            animation: slideOutRight 1.2s ease-in-out 2s forwards;
        }

        /* Decorative center line between curtains */
        .curtain-center-line {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 100%;
            background: linear-gradient(to bottom, #E85D54, transparent);
            opacity: 0.5;
            animation: fadeOutLine 0.5s ease 2.5s forwards;
        }

        /* Logo container - centered on the curtains initially */
        .logo-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10001;
            text-align: center;
            animation: fadeOut 0.8s ease 1.5s forwards;
        }

        /* The Evident logo styling */
        .logo-text {
            font-size: 5rem;
            font-weight: 900;
            color: #ffffff;
            letter-spacing: -2px;
            line-height: 1;
            animation: scaleIn 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
        }

        .logo-text .the {
            display: block;
            font-size: 2.5rem;
            font-weight: 400;
            margin-bottom: -10px;
        }

        .logo-text .evident {
            display: block;
        }

        .logo-text .evident .d-letter {
            color: #E85D54;
            position: relative;
        }

        /* Stylized 'd' with curve accent */
        .logo-text .evident .d-letter::before {
            content: '';
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 50px;
            border: 7px solid #E85D54;
            border-radius: 50% 50% 0 50%;
            border-right-color: transparent;
            border-bottom-color: transparent;
        }

        /* Main content section - appears after curtains open */
        .main-content {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ffffff;
            opacity: 0;
            z-index: 9998;
            animation: fadeInContent 1s ease 3s forwards;
        }

        .content-wrapper {
            max-width: 1200px;
            padding: 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        /* Left side - Magazine cover */
        .cover-section {
            text-align: center;
            animation: slideInLeft 0.8s ease 3.5s forwards;
            opacity: 0;
        }

        .cover-image {
            width: 100%;
            max-width: 400px;
            height: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            margin-bottom: 20px;
        }

        /* Right side - Introduction text */
        .intro-section {
            animation: slideInRight 0.8s ease 3.5s forwards;
            opacity: 0;
        }

        .intro-logo {
            margin-bottom: 30px;
        }

        .intro-logo-text {
            font-size: 3.5rem;
            font-weight: 900;
            color: #1a1a1a;
            letter-spacing: -2px;
            line-height: 1;
        }

        .intro-logo-text .the {
            display: block;
            font-size: 1.8rem;
            font-weight: 400;
            margin-bottom: -5px;
        }

        .intro-logo-text .evident .d-letter {
            color: #E85D54;
        }

        .tagline {
            font-size: 0.9rem;
            color: #666666;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 30px;
            font-family: 'Arial', sans-serif;
        }

        .intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333333;
            margin-bottom: 20px;
        }

        .intro-text strong {
            color: #E85D54;
            font-weight: 600;
        }

        .intro-highlights {
            list-style: none;
            margin: 25px 0;
        }

        .intro-highlights li {
            padding: 10px 0;
            padding-left: 30px;
            position: relative;
            color: #555555;
            font-size: 1rem;
        }

        .intro-highlights li::before {
            content: '→';
            position: absolute;
            left: 0;
            color: #E85D54;
            font-weight: bold;
        }

        .redirect-notice {
            margin-top: 30px;
            padding: 15px 20px;
            background: #f5f5f5;
            border-left: 4px solid #E85D54;
            font-size: 0.9rem;
            color: #666666;
            font-family: 'Arial', sans-serif;
        }

        .redirect-notice .countdown {
            color: #E85D54;
            font-weight: bold;
        }

        /* Confetti/particle container */
        .confetti-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            z-index: 10000;
            pointer-events: none;
            overflow: hidden;
        }

        /* Individual confetti particle */
        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            bottom: -20px;
            opacity: 0;
            animation: riseUp 2s ease-out forwards;
        }

        /* Keyframe animations */
        
        /* Logo scale in animation */
        @keyframes scaleIn {
            0% {
                transform: scale(0.5);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Slide left curtain out to the left */
        @keyframes slideOutLeft {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        /* Slide right curtain out to the right */
        @keyframes slideOutRight {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(100%);
            }
        }

        /* Fade out logo before curtains open */
        @keyframes fadeOut {
            to {
                opacity: 0;
                transform: translate(-50%, -50%) scale(1.1);
            }
        }

        /* Fade out center line */
        @keyframes fadeOutLine {
            to {
                opacity: 0;
            }
        }

        /* Fade in main content */
        @keyframes fadeInContent {
            to {
                opacity: 1;
            }
        }

        /* Slide in from left */
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Slide in from right */
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Rise animation for confetti particles */
        @keyframes riseUp {
            0% {
                bottom: -20px;
                opacity: 0;
                transform: translateX(0) rotate(0deg);
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 0.8;
            }
            100% {
                bottom: 110vh;
                opacity: 0;
                transform: translateX(var(--drift)) rotate(720deg);
            }
        }

        /* Responsive design */
        @media (max-width: 1024px) {
            .content-wrapper {
                grid-template-columns: 1fr;
                gap: 40px;
                padding: 30px;
            }

            .cover-section {
                order: 1;
            }

            .intro-section {
                order: 2;
            }

            .cover-image {
                max-width: 300px;
            }
        }

        @media (max-width: 768px) {
            .logo-text {
                font-size: 3.5rem;
            }
            
            .logo-text .the {
                font-size: 1.8rem;
            }

            .intro-logo-text {
                font-size: 2.5rem;
            }

            .intro-logo-text .the {
                font-size: 1.3rem;
            }

            .intro-text {
                font-size: 1rem;
            }

            .confetti {
                width: 8px;
                height: 8px;
            }
        }

        @media (max-width: 480px) {
            .logo-text {
                font-size: 2.5rem;
            }
            
            .logo-text .the {
                font-size: 1.3rem;
            }

            .intro-logo-text {
                font-size: 2rem;
            }

            .intro-logo-text .the {
                font-size: 1.1rem;
            }

            .content-wrapper {
                padding: 20px;
            }

            .cover-image {
                max-width: 250px;
            }

            .intro-text {
                font-size: 0.95rem;
            }

            .intro-highlights li {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <!-- Curtain animation elements -->
    <div class="curtain-container">
        <div class="curtain-left"></div>
        <div class="curtain-center-line"></div>
        <div class="curtain-right"></div>
    </div>

    <!-- Logo display in center of curtains -->
    <div class="logo-container">
        <div class="logo-text">
            <span class="the">The</span>
            <span class="evident">
                Evi<span class="d-letter">d</span>ent
            </span>
        </div>
    </div>

    <!-- Confetti particles container -->
    <div class="confetti-container" id="confettiContainer"></div>

    <!-- Main content - appears after curtains open -->
    <div class="main-content">
        <div class="content-wrapper">
            <!-- Left: Magazine Cover -->
            <div class="cover-section">
                <img src="{{asset('COVER.jpg')}}" 
                     alt="The Evident Magazine Cover" 
                     class="cover-image">
                <p style="font-size: 0.9rem; color: #999; margin-top: 10px; font-style: italic;">Latest Edition - August 2025</p>
            </div>

            <!-- Right: Introduction -->
            <div class="intro-section">
                <div class="intro-logo">
                    <div class="intro-logo-text">
                        <span class="the">The</span>
                        <span class="evident">
                            Evi<span class="d-letter">d</span>ent
                        </span>
                    </div>
                    <div class="tagline">Making What Matters Visible</div>
                </div>

                <p class="intro-text">
                    Welcome to <strong>The Evident</strong>, an English monthly magazine that brings clarity to the profound questions of our time.
                </p>

                <p class="intro-text">
                    Published by the Department of Civilizational Studies at Darul Hasanath Islamic College, we explore the intersections of faith, reason, and culture through thoughtful scholarship and engaging prose.
                </p>

                <ul class="intro-highlights">
                    <li>In-depth articles on theology and philosophy</li>
                    <li>Historical perspectives on Islamic civilization</li>
                    <li>Contemporary cultural analysis</li>
                    <li>Scholarly research and commentary</li>
                </ul>

                <div class="redirect-notice">
                    🌐 Redirecting to evidentmonthly.in in <span class="countdown" id="countdown">8</span> seconds...
                </div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript to generate confetti particles
        document.addEventListener('DOMContentLoaded', function() {
            const confettiContainer = document.getElementById('confettiContainer');
            const confettiCount = 100;
            
            // Color palette matching The Evident branding
            const colors = [
                '#E85D54', '#FF6B6B', '#D94841', '#1a1a1a', 
                '#FFFFFF', '#FFA07A', '#F08080', '#CD5C5C'
            ];

            // Create confetti particles
            for (let i = 0; i < confettiCount; i++) {
                const confetti = document.createElement('div');
                confetti.className = 'confetti';
                
                const randomColor = colors[Math.floor(Math.random() * colors.length)];
                confetti.style.backgroundColor = randomColor;
                
                const isLeftSide = Math.random() < 0.5;
                const horizontalPos = isLeftSide 
                    ? Math.random() * 30
                    : 70 + Math.random() * 30;
                confetti.style.left = horizontalPos + '%';
                
                const size = 6 + Math.random() * 10;
                confetti.style.width = size + 'px';
                confetti.style.height = size + 'px';
                
                const shapeType = Math.random();
                if (shapeType < 0.4) {
                    confetti.style.borderRadius = '50%';
                } else if (shapeType < 0.7) {
                    confetti.style.borderRadius = '0%';
                } else {
                    confetti.style.width = size * 1.5 + 'px';
                    confetti.style.borderRadius = '2px';
                }
                
                const delay = 1.8 + Math.random() * 0.6;
                confetti.style.animationDelay = delay + 's';
                
                const duration = 1.8 + Math.random() * 1.2;
                confetti.style.animationDuration = duration + 's';
                
                const drift = (Math.random() - 0.5) * 120;
                confetti.style.setProperty('--drift', drift + 'px');
                
                confettiContainer.appendChild(confetti);
            }

            // Countdown timer
            let timeLeft = 8;
            const countdownElement = document.getElementById('countdown');
            
            const countdownInterval = setInterval(() => {
                timeLeft--;
                countdownElement.textContent = timeLeft;
                
                if (timeLeft <= 0) {
                    clearInterval(countdownInterval);
                }
            }, 1000);

            // Auto-redirect to evidentmonthly.in after 8 seconds
            setTimeout(() => {
                window.location.href = 'https://evidentmonthly.in';
            }, 10000);
        });
    </script>
</body>
</html>