use demo;
create table Customer
(
customerEmail varchar(30) not null primary key,
customerePass varchar(30) not null,
customerName varchar(30) not null,
customerAdress varchar(30) not null,
customerPhone varchar(12) null
);

create table Category
(
categoryID int auto_increment primary key,
categoryName varchar(30)
);

create table Products
(
productID varchar(10) not null primary key,
productName varchar(50) not null,
productPrice int not null,	
productImage varchar(30) null,
categoryID int not null,
productDetails varchar(500) NULL,
constraint fk_catId foreign key (categoryID) references Category(categoryID)
);

create table `Comment`
(
commentID int auto_increment primary key,
productID varchar(10) not null,
commentDate datetime default now(),
commentContents varchar(500) not null,
commentStars tinyint(2) null,
customerEmail varchar(30) not null,
constraint fk_cusEmail foreign key (customerEmail) references customer(customerEmail),
constraint fk_proID foreign key (productID) references product(productID)
);

create table `Admin`
(
adminID varchar(15) not null primary key,
adminPass varchar(20) not null,
adminFullname varchar(50) not null
);

create table hoadon(
	SOHD	int not null,
	NGHD 	datetime,
	MAKH 	char(4),
	MANV 	char(4),
	TRIGIA	int,
	constraint pk_hd primary key(SOHD)
)