// WEBSITE CALCULATOR TOTAL PRICE
$(document).ready(function(){
    $('.allPriceClicked').prop('checked', false);
});
$(document).on('click', '.addmore', function() {
    let element = '<div class="col-lg-3 col-md-6">';
        element += '<input name="pagesName" type="checkbox" class="cc-name valid allPriceClicked '+$(this).attr("data-id")+'" value="'+$("#addField").val()+'" data-price="800" data-id="'+$(this).attr("data-id")+'" data-outPrint="'+$("#addField").val()+'">';
        element += '<label for="" class="control-label mb-1">'+$("#addField").val()+'</label>';
        element += '</div>';

    $("."+$(this).attr("data-outDiv")).append(element);
});
$(document).on('click', '.allPriceClicked', function() {
    let total = 0;
    if ($(this).is(':checked')) {
        if($(this).attr("data-inputType") == "radio")
        {
            $("input[name='"+$(this).attr("name")+"']:checkbox").prop('checked',false);
            $(this).prop('checked', true);
        }
    }
    let quoteHead = [];
    $(".allPriceClicked").each(function() {
        if ($(this).is(':checked')) {
            if($(this).attr("data-outPrint") != "")
            {
                if(quoteHead.includes($(this).attr("data-id")) === false) {
                    quoteHead.push($(this).attr("data-id"));
                }
            }
        }
    });
    let outQuot = "";
    let i = 0;
    quoteHead.forEach(function (item, index) {
        i = 0;
        $("."+item).each(function() {
            if ($(this).is(':checked')) {
                if(i==0) {
                    outQuot += "<div> "+$("."+item+"Head").attr("data-Head")+" ";
                }
                if(i > 0) {
                    outQuot += " , ";
                }
                outQuot += $(this).attr("data-outPrint");
                total += parseFloat($(this).attr("data-price"));
                i++;
            }
        });
        if(i > 0) {
            outQuot += "</div>";
        }
    });
    $('.priceOut').html(total);
    $('.quotation').html(outQuot);
});


// ADD NEW PAGE
$(document).ready(function () {
    $("#addpage").on("click", function () {
        $("#more_page").append(
            "<div class='col-lg-3 col-md-6 mb-2'><input type='text' id='' name='pages_name[]' value=''></div>"
        );
    });
    $("#removepage").on("click", function () {
        $("#more_page").children().last().remove();
    });
});

// ADD SPECIFIC REQUIREMENT
$(document).ready(function () {
    $("#add_specific_page").on("click", function () {
        $("#more_specific_page").append(
            "<div class='col-lg-3 col-md-6 mb-2'><input type='text' id='' name='pages_name[]' value=''></div>"
        );
    });
    $("#remove_specific_page").on("click", function () {
        $("#more_specific_page").children().last().remove();
    });
});

// TYPE PRICE
$(".type_price").change(function () {
    $(".type_price").prop("checked", false);
    $(this).prop("checked", true);
});

// PAGE PRICE
$(".page_price").change(function () {
    $(".page_price").prop("checked", false);
    $(this).prop("checked", true);
});

// ROI CALCULATION
function calculateROI() {
    var Amount = document.getElementById("amount").value;
    var Month = document.getElementById("month").value;
    var Rate = document.getElementById("rate").value;
    if (Amount === "" || Month == 0 || Rate === "") {
        alert("Please enter values");
        return;
    }
    if (Rate === "" || Rate <= 1) {
        Rate = 1;
        document.getElementById("totalamount").style.display = "block";
    } else {
        document.getElementById("totalamount").style.display = "block";
    }
    var total = [Amount * (Rate / 100) * Month];
    var grandTotal = parseFloat(total) + parseFloat(Amount);
    document.getElementById("total").style.display = "block";
    document.getElementById("total").innerHTML = grandTotal;
}
document.getElementById("calculate").onclick = function () {
    calculateROI();
};

// RESET DATA
function resetdata(){
    document.getElementById("myForm").value();
}






