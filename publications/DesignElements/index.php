<?php
# Directory Index (dirindex.php)
#
# Reads the current directory's content and displays it as
# HTML.  Useful if file listing is denied by the web server
# configuration.
#
# Installation:
# * Put in any directory you like on your PHP-capable webspace.
# * Rename to 'index.php' if you like it to get called if no
#   file is specified in the URL (e.g. www.example.com/files/).
# * Fit the design to your needs just using HTML and CSS.
#
# Changes since original release (25-Mar-2002):
# * simplified and modernized markup and styles (HTML5, CSS3,
#   list instead of table)
# * more functional programming approach
# * improved configurability
# * escaping of HTML characters
# * license changed from GPL to MIT
# * requires PHP 5.3.0 or later
#
# Version: 25-May-2011
# Copyright (c) 2002, 2011 Jochen Kupperschmidt
# Released under the terms of the MIT license
# <http://www.opensource.org/licenses/mit-license.php>


### configuration

# Show the local path. Disable this for security reasons.
define('SHOW_PATH', TRUE);

# Show a link to the parent directory ('..').
define('SHOW_PARENT_LINK', TRUE);

# Show "hidden" directories and files, i.e. those whose names
# start with a dot.
define('SHOW_HIDDEN_ENTRIES', TRUE);

### /configuration


function get_grouped_entries($path) {
    list($dirs, $files) = collect_directories_and_files($path);
    $dirs = filter_directories($dirs);
    $files = filter_files($files);
    return array_merge(
        array_fill_keys($dirs, TRUE),
        array_fill_keys($files, FALSE));
}

function collect_directories_and_files($path) {
    # Retrieve directories and files inside the given path.
    # Also, `scandir()` already sorts the directory entries.
    $entries = scandir($path);
    return array_partition($entries, function($entry) {
        return is_dir($entry);
    });
}

function array_partition($array, $predicate_callback) {
    # Partition elements of an array into two arrays according
    # to the boolean result from evaluating the predicate.
    $results = array_fill_keys(array(1, 0), array());
    foreach ($array as $element) {
        array_push(
            $results[(int) $predicate_callback($element)],
            $element);
    }
    return array($results[1], $results[0]);
}

function filter_directories($dirs) {
    # Exclude directories. Adjust as necessary.
    return array_filter($dirs, function($dir) {
        return $dir != '.'  # current directory
            && (SHOW_PARENT_LINK || $dir != '..') # parent directory
            && !is_hidden($dir);
    });
}

function filter_files($files) {
    # Exclude files. Adjust as necessary.
    return array_filter($files, function($file) {
        return !is_hidden($file)
            && substr($file, -4) != '.php';  # PHP scripts
    });
}

function is_hidden($entry) {
    return !SHOW_HIDDEN_ENTRIES
        && substr($entry, 0, 1) == '.'  # Name starts with a dot.
        && $entry != '.'  # Ignore current directory.
        && $entry != '..';  # Ignore parent directory.
}

$path = __DIR__ . '/';
$entries = get_grouped_entries($path);
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8"/>
    <style>
      body {
        background-color: #eeeeee;
        font-family: Verdana, Arial, sans-serif;
        font-size: 90%;
        margin: 4em 0;
      }

      article,
      footer {
        display: block;
        margin: 0 auto;
        width: 480px;
      }

      a {
        color: #004466;
        text-decoration: none;
      }
      a:hover {
        text-decoration: underline;
      }
      a:visited {
        color: #666666;
      }

      article {
        background-color: #ffffff;
        border: #cccccc solid 1px;
        -moz-border-radius: 11px;
        -webkit-border-radius: 11px;
        border-radius: 11px;
        padding: 0 1em;
      }
      h1 {
        font-size: 140%;
      }
      ol {
        line-height: 1.4em;
        list-style-type: disc;
      }
      li.directory a:before {
        content: '[ ';
      }
      li.directory a:after {
        content: ' ]';
      }

      footer {
        font-size: 70%;
        text-align: center;
      }
    </style>
    <title>ppbw :: Elements utilisés dans les affiches </title>
  </head>
  <body>

    <article>
      <h1>Elements utilisés dans les affiches</h1>
      <ol>
<?php
foreach ($entries as $entry => $is_dir) {
    $class_name = $is_dir ? 'directory' : 'file';
    $escaped_entry = htmlspecialchars($entry);
    printf('        <li class="%s"><a href="%s">%s</a></li>' . "\n",
        $class_name, $escaped_entry, $escaped_entry);
}
?>
      </ol>
    </article>

    <footer>
      <p>directory index script written by <a href="http://homework.nwsnet.de/">Jochen Kupperschmidt</a></p>
    </footer>

  </body>
</html>
