/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var activeTarget;

function beActive(target) {
    activeTarget = target;
}

function setActive() {
    activeTarget.className += " active";
}