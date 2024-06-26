<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-color: #f0f0f0;
    }

    .card {
        width: 300px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .card-header {
        background-color: #ffffff;
        color: #333;
        text-align: left;
        padding: 15px;
        border-bottom: 1px solid #ccc;
    }

    .card-header h2 {
        margin: 0;
        font-size: 1.2rem;
    }

    .card-body {
        padding: 20px;
        padding-bottom: 0;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 8px;
        display: block;
    }

    input {
        padding: 8px;
        margin-bottom: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .card-footer {
        text-align: left;
        padding: 15px;
    }

    button {
        padding: 10px 20px;
        background-color: #4caf50;
        color: #ffffff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #45a049;
    }

    @media (max-width: 600px) {
        .card {
            width: 90%;
        }
    }
</style>