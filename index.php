<HTML>
  <Head>
    <Title>Ed's Documentation</Title>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
  </Head>
  <Body>
    <div class="control">
      Select Document:
      <Select id="option" onchange="sendView()">
        <option value="blank.md"></option>
        <?php
          if ($handle = opendir('file')) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != ".." && $entry != "blank.md" && $entry != ".git" && $entry != "README.md") {
                    echo "<option id=\"$entry\">$entry</option>";
                }
            }
            closedir($handle);
          }
         ?>
      </Select>
    </div>
    <iframe id="viewer" src="file.html?file=file/blank.md"></iframe>
  </Body>
</HTML>
