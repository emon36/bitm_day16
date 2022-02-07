<?php


namespace App\classes;


class Product
{

    protected $product_id;
    protected $products;
    protected $result=[];


    /**
     * @return mixed
     */
    public function getAllProduct()
    {
        return [
            0 => [
                'id' => '1',
                'title' => 'FORMAL SHIRTS FOR MEN',
                'Description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'price' => '200$',
                'category' => 'Men Fashion',
                'Brand' => 'Gucci',
                'img' => 'shirt.png'
            ],

            1 => [
                'id' => '2',
                'title' => 'Long Sleeve Formal Shirt for',
                'Description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'price' => '200$',
                'category' => 'Men fashion',
                'Brand' => 'Gucci',
                'img' => 'shirt1.jpg'
            ],
            2 => [
                'id' => '3',
                'title' => 'Product 3',
                'Description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'price' => '200$',
                'category' => 'Shirt',
                'Brand' => 'Gucci',
                'img' => 'shirt3.png'
            ],
            3 => [
                'id' => '4',
                'title' => 'Product 4',
                'Description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'price' => '200$',
                'category' => 'Shirt',
                'Brand' => 'Gucci',
                'img' => ''
            ],
            4 => [
                'id' => '5',
                'title' => 'Product 5',
                'Description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'price' => '200$',
                'category' => 'Shirt',
                'Brand' => 'Gucci',
                'img' => ''
            ],

        ];
    }

    public function getSingleProduct($id=null){

        $this->product_id = $id;

        $this->products = $this->getAllProduct();

        foreach ($this->products as $product)
        {
            if($this->product_id == $product['id']){
                return $this->result = $product;
                break;
            }

        }
        return $this->result;
    }




}