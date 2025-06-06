<style>
    body {
        padding: 20px;
        background-color: #f9f9f9;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .form-label {
        font-weight: 500;
    }
    .form-control,
    .form-select {
        font-size: 1rem;
        padding: 12px;
    }
    .btn-lg {
        padding: 12px;
        font-size: 1.1rem;
    }
    .center-container {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      flex-direction: column;
    }

    .center-text h1 {
      font-size: 2rem;
      font-weight: 500;
      margin-bottom: 20px;
      letter-spacing: 2px;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);
      animation: fadeInDown 1.5s ease-out forwards;
    }

    .center-text p {
      font-size: 1.2rem;
      font-style: italic;
      opacity: 0;
      animation: fadeInUp 2s ease-in forwards;
    }

    @keyframes fadeInDown {
      0% {
        transform: translateY(-40px);
        opacity: 0;
      }
      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }

    @keyframes fadeInUp {
      0% {
        transform: translateY(20px);
        opacity: 0;
      }
      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }
     .glass-card {
      background: rgba(255, 255, 255, 0.25);
      border: 2px solid rgba(255, 255, 255, 0.5);
      border-radius: 20px;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
      max-width: 600px;
      width: 100%;
    }

    .clickable {
      color: #0d6efd;
      cursor: pointer;
      text-decoration: underline;
    }

    .clickable:hover {
      color: #084298;
    }
     .fade-enter-active,
    .fade-leave-active {
        transition: opacity 500ms ease-in-out;
    }

    .fade-enter-from,
    .fade-leave-to {
        opacity: 0;
    }
 </style>   
