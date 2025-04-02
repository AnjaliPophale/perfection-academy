<?php
defined('BASEPATH') OR exit('nope');

class Main {
    protected $edb, $params;

    public function __construct($edb = null, $params = array()) {
        $this->edb = $edb;
        $this->params = $params;
    }

    public function setParam($params) {
        $this->params = $params;
    }

    protected function render($fileName, $other = array()) {
        if (!isset($other['meta'])) {
            $other['meta'] = array(
                "title" => "Perfection Academy",
                "description" => "Perfection Academy",
                "keywords" => "Perfection Academy",
                "image" => "Perfection Academy",
            );
        } else {
            if (!isset($other['meta']['title'])) {
                $other['meta']['title'] = "Perfection Academy";
            }
            if (!isset($other['meta']['description'])) {
                $other['meta']['description'] = "Perfection Academy";
            }
            if (!isset($other['meta']['keywords'])) {
                $other['meta']['keywords'] = "Perfection Academy";
            }
            if (!isset($other['meta']['image'])) {
                $other['meta']['image'] = "Perfection Academy";
            }
        }

        $headData = array(
            "meta" => $other['meta'],
            "css" => isset($other['css']) ? $other['css'] : array()
        );

        if (isset($other['data'])) {
            extract($other['data']);
        }

        require_once DIR . 'view/includes/head.php';
        require_once DIR . 'view/includes/header.php';

        // ✅ Check if the view file exists before including it
        $viewPath = DIR . 'view/' . $fileName . '.php';
        if (file_exists($viewPath)) {
            require_once $viewPath;
        } else {
            echo "<h2>View file not found: $viewPath</h2>";
        }

        $footData = array(
            "js" => isset($other['js']) ? $other['js'] : array()
        );

        require_once DIR . 'view/includes/footer.php';
    }
}
?>
