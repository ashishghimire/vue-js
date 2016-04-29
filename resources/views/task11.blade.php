@extends('app')
<div id="restaurant">
    <ul class="list-group">
        <li class="list-group-item" v-for="item in items">
            @{{ item.name }} &nbsp;
            @{{ item.price | currency }}
            <button @click = "order($index)">+1</button>
            <button v-if="item.qty > 1" @click = "removeOne($index)">-1</button>
            <button v-if="item.ordered" @click = "cancel($index)">Cancel</button>
        </li>
    </ul>
    <h2>Your Order</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Amount</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="orderedItem in orderedItems">
            <td>@{{ orderedItem.name }}</td>
            <td>@{{ orderedItem.price }}</td>
            <td>@{{ orderedItem.qty }}</td>
            <td>@{{ orderedItem.price*orderedItem.qty|currency }}</td>
        </tr>
        <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td><strong>Total: </strong>@{{ totalPrice|currency}}</td>
        </tr>
        </tbody>
    </table>
</div>