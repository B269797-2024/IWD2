<?php include("header.php"); ?>

<div class="main-container">
  <div class="centered-form">
    <h1>🔬 Analyze a Protein</h1>
  <form method="POST" action="process_form.php">
  <label for="protein">Protein Keyword:</label>
  <input type="text" id="protein" name="protein" value="Glucose-6-phosphatase" required>

  <label for="taxon">Taxonomic Group:</label>
  <input type="text" id="taxon" name="taxon" value="Aves" required>

  <label for="min_len">Min Sequence Length:</label>
  <input type="number" id="min_len" name="min_len" value="100">

  <label for="max_len">Max Sequence Length:</label>
  <input type="number" id="max_len" name="max_len" value="1200">

  <label for="retmax">Max Sequences to Retrieve:</label>
  <input type="number" id="retmax" name="retmax" value="100">

  <input type="submit" value="Submit">
</form>

  </div>
</div>


<?php include("footer.php"); ?>

