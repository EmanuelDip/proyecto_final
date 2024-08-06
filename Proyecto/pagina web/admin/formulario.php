<section class="upload-form">
  <h2>Subir nuevo instructor</h2>
  <form action="subir_instructor.php" method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="especialidad">especialidad:</label>
    <textarea id="especialidad" name="especialidad" rows="4" required></textarea>

    <label for="foto_perfil">foto_perfil:</label>
    <input type="file" id="foto_perfil" name="foto_perfil" accept="image/*" required>

    <button type="submit" name="submit">Subir Instructor</button>

  </form>
</section>


<style>
.upload-form {
    max-width: 600px;
    margin: 0 auto;
    padding: 2em;
    background: #f4f4f4;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.upload-form h2 {
    text-align: center;
    margin-bottom: 1em;
    color: #333;
}

.upload-form form {
    display: flex;
    flex-direction: column;
}

.upload-form label {
    margin-bottom: 0.5em;
    font-weight: bold;
    color: #555;
}

.upload-form input[type="text"],
.upload-form textarea,
.upload-form input[type="file"] {
    margin-bottom: 1em;
    padding: 0.8em;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1em;
}

.upload-form textarea {
    resize: none; /* Permite redimensionar verticalmente */
}

.upload-form button {
    padding: 0.8em;
    background-color: #28a745;
    border: none;
    color: #fff;
    font-size: 1em;
    cursor: pointer;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.upload-form button:hover {
    background-color: #218838;
}

.upload-form button:active {
    background-color: #1e7e34;
}

</style>