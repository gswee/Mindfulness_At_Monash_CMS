<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="article form large-9 medium-8 columns content">
    <table>
        <tr>
            <td>Username: </td>
            <td><?= $user->username ?></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><?= $user->email ?></td>
        </tr>
    </table>
</div>
