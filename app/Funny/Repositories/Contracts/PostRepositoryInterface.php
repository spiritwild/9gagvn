<?php
/**
 * @author dungnt13
 * @date 9/10/2015
 */

namespace App\Funny\Repositories\Contracts;


interface PostRepositoryInterface
{
    /**
     * Get category repository
     *
     * @return \App\Funny\Repositories\Contracts\
     */
    public function getCategoryRepo();

    /**
     * Get store repository
     *
     * @return \App\Funny\Repositories\Contracts\
     */
    public function getStoreRepo();

    public function getForm();

    /**
     * Clean data input
     *
     * @param array $array
     * @return mixed
     */
    public function cleanData(array $array);

    /**
     * Create or update a post
     *
     * @param \App\Funny\Models\Post $post
     * @param array $array
     * @param integer $user_id
     * @return \App\Funny\Models\Post
     */
    public function savePost($post, $array, $user_id = null);

    /**
     * Process save a post and references
     *
     * @param array $data
     * @param integer $id
     * @param integer $user_id
     * @return \App\Funny\Models\Post
     */
    public function updatePost($data, $id = null, $user_id = null);

    /**
     * Get post collection
     * @param int $n
     * @param string $q
     * @param int $category
     * @param int $user_id
     * @param string $orderBy
     * @param string $direction
     * @return \Illuminate\Support\Collection
     */
    public function index($n, $q = null, $category = null, $user_id = null, $orderBy = 'created_at', $direction = 'desc');

    /**
     * Get resource an references to edit
     *
     * @param $id
     * @return \Illuminate\Support\Collection;
     */
    public function edit($id);

}