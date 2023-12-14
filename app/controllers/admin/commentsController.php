<?php
class CommentsController extends Controller {
    private $commentModel;
    private $commentData;

    public function __construct()
    {
        $this->commentModel = $this->model("commentModel");
        $this->commentData = json_decode($this->commentModel->getAllCommentsData());
    }

    public function index() {
        $this->commentData = json_decode($this->commentModel->getAllCommentsData());
        $this->viewAdmin('layout', ['page' => 'tabs/comments/comments', 'comments' => $this->commentData]);
    }

    public function viewResult($res) {
        $this->viewAdmin('layout', ['page' => 'tabs/comments/result', 'result' => $res]);
    }

    public function viewDeleteResult($res) {
        $this->viewAdmin('layout', ['page' => 'tabs/comments/deleteResult', 'result' => $res]);
    }

    public function addResponse($comment_id) {
        if (isset($_POST['resSubmit'])) {
            $response = $_POST['response'];
            $this->viewResult($this->commentModel->addResponse($comment_id, $response));
        }
    }

    public function respond($comment_id = -1) {
        if ($comment_id == -1) {
            header("Location: /Code-Tour/public/admin/comments");
        }
        $data = json_decode($this->commentModel->getCommentInfo($comment_id));
        $this->viewAdmin('layout', ['page' => 'tabs/comments/respond', 'comment' => $data]);
    }

    public function delete($comment_id = -1) {
        if ($comment_id == -1) {
            header("Location: /Code-Tour/public/admin/comments");
        }
        $this->viewDeleteResult($this->commentModel->deleteComment($comment_id));
    }
}
?>