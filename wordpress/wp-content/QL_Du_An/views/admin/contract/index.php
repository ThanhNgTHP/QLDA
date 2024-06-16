<?php 

include_once getenv('DIR_CONTROLLERS').'\\contract.php';

$current_directory_url = content_url().'/QL_Du_An/views/contract';

wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

?>

<form action="" method="post">
    <input id="input-find" class="outline ml-[10px] p-[0_0_0_5px]" name="contractName" type="text" placeholder="Tìm Kiếm">
    <button id="btn-find" 
            name="method"
            value="find"
            type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
    >Tìm kiếm</button>
</form>

<div class="overflow-auto">
    <div class="text-xl grid grid-cols-10 gap-1 
                    w-[250%]
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600" >
                    <div style="margin: auto;">Tên hợp đồng</div>
                    <div style="margin: auto;">Số hợp đồng</div>
                    <div style="margin: auto;">Ngày kí kết</div>
                    <div style="margin: auto;">Ngày hết hạn</div>
                    <div style="margin: auto;">Ghi chú</div>
                    <div style="margin: auto;">Giá trị hợp đồng</div>
                    <div style="margin: auto;">Trạng thái</div>
                    <div style="margin: auto;">Tên đối tác</div>
                    <div style="margin: auto;">Tên dự án</div>
                    <div style="margin: auto;">Công cụ</div>
    </div>

    <form action="" method="post">
        <div class="grid grid-cols-10 gap-1 
                    w-[250%]
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600">
            <div class="text-xl" style="margin: auto;">
                <input type="text" name="name" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="number" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="date" name="signDay" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="date" name="expire" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="note" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="value" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="status" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <select name="partnerID" id="">
                    <?php foreach(Partner::GetAllPartner() as $key => $partner): ?>
                        <option value="<?php echo $partner->ID; ?>"><?php echo $partner->Name; ?> - <?php echo $partner->ID; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="text-xl" style="margin: auto;">
                <select name="projectID" id="">
                    <?php foreach(Project::GetAllProject() as $key => $project): ?>
                        <option value="<?php echo $project->ID; ?>"><?php echo $project->Name; ?> - <?php echo $project->ID; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>            
            
            <div style="margin: auto;">
                <button type="submit" name="method" value="add" class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Thêm
                </button>
            </div>
        </div>

    </form>

    <?php $contracts = array_reverse($contracts);?>
    <?php foreach($contracts as $key => $contract): ?>
        <form action="" method="post">
            <div class="grid grid-cols-10 gap-1
                        w-[250%]
                        p-[25px_0_0_0]
                        m-[50px_0_0_0]
                        border-t-solid
                        border-t-2 
                        border-t-indigo-600">

                <div class="text-xl hidden" style="margin: auto;">
                    <input type="text" name="id" value="<?php echo $contract->ID; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="name" value="<?php echo $contract->Name; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="number" value="<?php echo $contract->Number; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="date" name="signDay" value="<?php echo $contract->SignDay; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="date" name="expire" value="<?php echo $contract->Expire; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="note" value="<?php echo $contract->Note; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="value" value="<?php echo $contract->Value; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="status" value="<?php echo $contract->Status; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <select name="partnerID" id="">
                        <?php $partnerSelect = $contract->GetContractPartner(); ?>
                        <option value="<?php echo $partnerSelect->ID ?>"><?php echo $partnerSelect->Name . '-' . $partnerSelect->ID; ?></option>
                        <?php foreach(Partner::GetAllPartner() as $key => $partner): ?>
                            <?php if($partnerSelect->ID !== $partner->ID): ?>
                            <option value="<?php echo $partner->ID ?>"><?php echo $partner->Name . '-' . $partner->ID; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="text-xl" style="margin: auto;">
                    <select name="projectID" id="">
                        <?php $projectSelect = $contract->GetContractProject();?>
                        <option value="<?php echo $projectSelect->ID ?>"><?php echo $projectSelect->Name . '-' . $projectSelect->ID; ?></option>
                        <?php foreach(Project::GetAllProject() as $key => $project): ?>
                            <?php if($projectSelect->ID !== $project->ID): ?>
                            <option  value="<?php echo $project->ID ?>"><?php echo $project->Name . '-' . $project->ID; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div style="margin: auto;">
                    <button type="submit" name="method" value="edit" class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        Sửa
                    </button>
                    <button type="submit" name="method" value="delete" class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        Xóa
                    </button>
                </div>
            </div>
        </form>
    <?php endforeach; ?>
</div>
    
<?php

wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
wp_enqueue_script( 'login_script', $current_directory_url.'/index.js', array(), time(), true);

?>